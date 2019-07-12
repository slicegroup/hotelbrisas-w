# frozen_string_literal: true

module KepplerBooking
  # PricesRoom Model
  class PricesRoom < ApplicationRecord
    include ActivityHistory
    include CloneRecord
    include Uploadable
    include Downloadable
    include Sortable
    include Searchable
    acts_as_list
    acts_as_paranoid
    belongs_to :room

    def self.index_attributes
      %i[]
    end
  end
end
