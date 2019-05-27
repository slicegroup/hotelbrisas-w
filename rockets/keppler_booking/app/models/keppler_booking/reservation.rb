# frozen_string_literal: true

module KepplerBooking
  # Reservation Model
  class Reservation < ApplicationRecord
    include ActivityHistory
    include CloneRecord
    include Uploadable
    include Downloadable
    include Sortable
    include Searchable
    acts_as_list
    acts_as_paranoid

    def self.index_attributes
      %i[name email origin motive]
    end
  end
end
