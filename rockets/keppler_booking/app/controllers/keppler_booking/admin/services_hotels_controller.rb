
# frozen_string_literal: true

require_dependency "keppler_booking/application_controller"
module KepplerBooking
  module Admin
    # ServicesHotelsController
    class ServicesHotelsController < ::Admin::AdminController
      layout 'keppler_booking/admin/layouts/application'
      before_action :set_services_hotel, only: %i[show edit update destroy]
      before_action :index_variables
      include ObjectQuery

      # GET /keppler_bookings
      def index
        respond_to_formats(@services_hotels)
        redirect_to_index(@objects)
      end

      # GET /keppler_bookings/1
      def show; end

      # GET /keppler_bookings/new
      def new
        @services_hotel = ServicesHotel.new
      end

      # GET /keppler_bookings/1/edit
      def edit; end

      # POST /keppler_bookings
      def create
        @services_hotel = ServicesHotel.new(services_hotel_params)

        if @services_hotel.save
          redirect(@services_hotel, params)
        else
          render :new
        end
      end

      # PATCH/PUT /keppler_bookings/1
      def update
        if @services_hotel.update(services_hotel_params)
          redirect(@services_hotel, params)
        else
          render :edit
        end
      end

      def clone
        @services_hotel = ServicesHotel.clone_record params[:services_hotel_id]
        @services_hotel.save
        redirect_to_index(@objects)
      end

      # DELETE /keppler_bookings/1
      def destroy
        @services_hotel.destroy
        redirect_to_index(@objects)
      end

      def destroy_multiple
        ServicesHotel.destroy redefine_ids(params[:multiple_ids])
        redirect_to_index(@objects)
      end

      def upload
        ServicesHotel.upload(params[:file])
        redirect_to_index(@objects)
      end

      def reload; end

      def sort
        ServicesHotel.sorter(params[:row])
      end

      private

      def index_variables
        @q = ServicesHotel.ransack(params[:q])
        @services_hotels = @q.result(distinct: true)
        @objects = @services_hotels.page(@current_page).order(position: :asc)
        @total = @services_hotels.size
        @attributes = ServicesHotel.index_attributes
      end

      # Use callbacks to share common setup or constraints between actions.
      def set_services_hotel
        @services_hotel = ServicesHotel.find(params[:id])
      end

      # Only allow a trusted parameter "white list" through.
      def services_hotel_params
        params.require(:services_hotel).permit(
          :name, :icon, :description
        )
      end
    end
  end
end
